<?php

namespace App\Livewire;

use App\Models\Project\Project;
use App\Models\Project\ProjectCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Projects extends Component
{
    use WithPagination;

    public ProjectCategory $category;
    public bool $category_selected = false;
    public int $page = 1;
    private int $per_page = 8;

    public function showAll()
    {
        $this->reset($this->category);
        $this->category_selected = false;
        $this->pageReset();
    }

    public function showCategory($category_id)
    {
        $this->category = ProjectCategory::find($category_id);
        $this->category_selected = true;
        $this->pageReset();
    }

    public function loadmore()
    {
        $this->page += 1;
    }

    private function pageReset()
    {
        $this->page = 1;
    }

    public function render()
    {
        $categories = cache()->remember('project_categories', now()->addDay(), function () {
            return ProjectCategory::query()->get();
        });

        if ($this->category_selected) {
            $projects_builder = $this->category->projects();
        } else {
            $projects_builder = Project::query();
        }

        $projects = $projects_builder->with('media')->paginate($this->per_page * $this->page);

        return view('livewire.projects', [
            'category_id' => $this->category_selected && !empty($this->category)
                ? $this->category->id
                : false,
            'categories' => $categories,
            'projects' => $projects
        ]);
    }
}
