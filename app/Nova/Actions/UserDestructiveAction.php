<?php

namespace App\Nova\Actions;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Actions\ActionResponse;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Http\Requests\NovaRequest;
use Illuminate\Support\Collection;

class UserDestructiveAction extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param ActionFields $fields
     * @param Collection<int, User> $models
     * @return ActionResponse
     */
    public function handle(ActionFields $fields, Collection $models): ActionResponse
    {
       return Action::message(__('The user was destroyed successfully.'));
    }

    public static function register(): self
    {
        /** @var UserDestructiveAction $action */
        $action = resolve(self::class);

        return $action->exceptOnIndex()
            ->confirmText(__('Are you sure you want to use this action?'))
            ->canRun(function (NovaRequest $request, User $user) {
                return false;
            });
    }
}
