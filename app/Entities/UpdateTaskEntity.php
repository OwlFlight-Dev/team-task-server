<?php

namespace App\Entities;

class UpdateTaskEntity
{
    public string $title;
    public string $priority;
    public string $projectId;
    public string $description;
    public string $imageAttachment;
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
     * @param string $projectId
     */
    public function setProjectId(string $projectId): void
    {
        $this->projectId = $projectId;
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
     * @param string $imageAttachment
     */
    public function setImageAttachment(string $imageAttachment): void
    {
        $this->imageAttachment = $imageAttachment;
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
