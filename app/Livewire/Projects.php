<?php

namespace App\Livewire;

use App\Models\Project\Project;
use App\Models\Project\ProjectCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Projects extends Component
{
    use WithPagination;

    public ProjectCategory $project_category;
    public bool $project_category_selected = false;
    public int $page = 1;
    private int $per_page = 9;

    public function showAll()
    {
        $this->project_category_selected = false;
        $this->page = 1;
    }

    public function setCategory($category_id)
    {
        $this->project_category = ProjectCategory::find($category_id);

        if ($this->project_category) {
            $this->project_category_selected = true;
        }

        $this->page = 1;
    }

    public function next()
    {
        $this->page += 1;
    }

    public function render()
    {
        $categories = ProjectCategory::query()->get();

        if ($this->project_category_selected) {
            $projects = $this->project_category
                    ->projects()
                    ->paginate($this->per_page * $this->page);
        } else {
            $projects = Project::query()
                    ->paginate($this->per_page * $this->page);
        }

        return view('livewire.projects', [
            'category_id' => $this->project_category_selected && isset($this->project_category) ? $this->project_category->id : false,
            'categories' => $categories,
            'projects' => $projects
        ]);
    }
}
