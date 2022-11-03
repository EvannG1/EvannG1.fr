<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DegreeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class DegreeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DegreeCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Degree::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/degree');
        CRUD::setEntityNameStrings('degree', 'degrees');
    }

    protected function setupReorderOperation()
    {
        // model attribute to be shown on draggable items
        $this->crud->set('reorder.label', 'name');
        // maximum number of nesting allowed
        $this->crud->set('reorder.max_level', 2);

        // extras:
        // $this->crud->disableReorder();
        $this->crud->isReorderEnabled();
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name');
        CRUD::column('school_name')->label('School');
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(DegreeRequest::class);

        CRUD::field('name');
        CRUD::field('description')->type('summernote');
        CRUD::field('degree_image')->type('upload')->upload(true)->disk('public');
        CRUD::field('school_name')->size('6');
        CRUD::field('school_website')->size('6');
        CRUD::field('start_date')->size('6')->type('date');
        CRUD::field('end_date')->size('6')->type('date');
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
