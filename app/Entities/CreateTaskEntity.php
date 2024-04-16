<?php

namespace App\Entities;

class CreateTaskEntity
{
    public string $title;
    public string $author;
    public string $description; // nullable
    public string $assignee; // nullable
    public string $priority; // default 0
    public string $image_attachment; // nullable
    public string $project_id; // nullable

    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
    
    /**
     * Set description
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Set assignee
     * @param string $assignee
     */
    public function setAssignee(string $assignee): void
    {
        $this->assignee = $assignee;
    }

     /**
     * Set priority
     * @param int $title
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

     /**
     * Set image attachment
     * @param string $image_attachment
     */
    public function setImageAttachment(string $image_attachment): void
    {
        $this->image_attachment = $image_attachment;
    }

    /**
     * Set project id
     * @param string $project_id
     */
    public function setProjectId(string $project_id): void
    {
        $this->project_id = $project_id;
    }

}
