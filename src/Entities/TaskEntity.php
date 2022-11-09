<?php
    class TaskEntity {
        private int $id;

        private string $title;

        private string $description;

        private bool $completed;

        private string $createdAt;

        private string $updatedAt;

        private string $completedAt;

        public function getId(): int {
            return $this->id;
        }

        public function setId($newId) :TaskEntity {
            $this->id = $newId;
            return $this;
        }

        public function getTitle() : string {
            return $this->title;
        }

        public function setTitle($newTitle) : TaskEntity {
            $this->title = $newTitle;
            return $this;
        }

        public function getDescription() : string {
            return $this->description;
        }

        public function setDescription($newDescription): TaskEntity{
            $this->description = $newDescription;
            return $this;
        }

        public function isCompleted() : bool {
            return $this->completed;
        }

        public function setCompleted($newState) :TaskEntity{
            $this->completed = $newState;
            return $this;
        }
        
        public function getCreatedAt() : string {
            return $this->createdAt;
        }

        public function setCreatedAt($newDateOfCreation) : TaskEntity{
            $this->createdAt = $newDateOfCreation;
            return $this;
        }

        public function getUpdatedAt() : string {
            return $this->updatedAt;
        }

        public function setUpdatedAt($newUpdateDate) :TaskEntity {
            $this->updatedAt = $newUpdateDate;
            return $this;
        }

        public function getCompletedAt() : string {
            return $this->completedAt;
        }

        public function setCompletedAt($newCompletedDate) : TaskEntity {
            $this->completedAt = $newCompletedDate;
            return $this;
        }
    }
?>