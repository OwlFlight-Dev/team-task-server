<?php

namespace App\Entities;

class CreateTaskEntity
{
    public string $title;
    public string $author;
    public string $description; // nullable
    public string $assignee; // nullable
    public string $priority; // default 0
    public string $imageAttachment; // nullable
    public string $projectId; // nullable

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
     * @param string $imageAttachment
     */
    public function setImageAttachment(string $imageAttachment): void
    {
        $this->imageAttachment = $imageAttachment;
    }

    /**
     * Set project id
     * @param string $projectId
     */
    public function setProjectId(string $projectId): void
    {
        $this->projectId = $projectId;
    }

}
