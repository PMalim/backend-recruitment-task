<?php
namespace app\models;

class User
{
    public function __construct(
        public int $id,
        public string $name,
        public string $username,
        public string $email,
        public array $address,
        public string $phone,
        public string $website,
        public array $company
    ) {
        $this->validateTypes();
    }

    private function validateTypes(): void
    {
        if (!is_int($this->id)) {
            throw new \InvalidArgumentException("Wrong type of Id.");
        }

        if (!is_string($this->name)) {
            throw new \InvalidArgumentException("Wrong type of Name.");
        }

        if (!is_string($this->username)) {
            throw new \InvalidArgumentException("Wrong type of Username.");
        }

        if (!is_string($this->email)) {
            throw new \InvalidArgumentException("Wrong type of Email.");
        }

        if (!is_array($this->address)) {
            throw new \InvalidArgumentException("Wrong type of Address.");
        }

        if (!is_string($this->phone)) {
            throw new \InvalidArgumentException("Wrong type of Phone.");
        }

        if (!is_string($this->website)) {
            throw new \InvalidArgumentException("Wronge type of Website.");
        }

        if (!is_array($this->company)) {
            throw new \InvalidArgumentException("Wrong type of Company.");
        }
    }
}