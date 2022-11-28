<?php

namespace App\Policies;

use App\Models\Staff;
use App\Models\Visits;
use Illuminate\Auth\Access\HandlesAuthorization;

class VisitsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Staff $staff)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Staff  $staff
     * @param  \App\Models\Visits  $visits
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Staff $staff, Visits $visits)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Staff $staff)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Staff  $staff
     * @param  \App\Models\Visits  $visits
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Staff $staff, Visits $visits)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Staff  $staff
     * @param  \App\Models\Visits  $visits
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Staff $staff, Visits $visits)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Staff  $staff
     * @param  \App\Models\Visits  $visits
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Staff $staff, Visits $visits)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Staff  $staff
     * @param  \App\Models\Visits  $visits
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Staff $staff, Visits $visits)
    {
        //
    }
}
