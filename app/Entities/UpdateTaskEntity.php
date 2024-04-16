<?php

namespace App\Entities;

class UpdateTaskEntity
{
    public string $title;
    public string $priority;
    public string $project_id;
    public string $description;
    public string $image_attachment;
    public string $author;
    public string $assignee;

    /**
     * Set title
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
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
     * Set project id
     * @param string $project_id
     */
    public function setProjectId(string $project_id): void
    {
        $this->project_id = $project_id;
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
     * Set image attachment
     * @param string $image_attachment
     */
    public function setImageAttachment(string $image_attachment): void
    {
        $this->image_attachment = $image_attachment;
    }

     /**
     * Set author
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

     /**
     * Set assignee
     * @param string $assignee
     */
    public function setAssignee(string $assignee): void
    {
        $this->assignee = $assignee;
    }
}
