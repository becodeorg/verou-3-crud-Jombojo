<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(string $name, string $type): void
    {
        $sqlQuery = 'INSERT INTO types (name, type, created_at) VALUES (:name, ;type, NOW())';
        $statement = $this->databaseManager-> connection->prepare($sqlQuery);
        $statement->execute([
            ':name' => $name,
            ':type' => $type
        ]);
    }

    // Get one
    public function find(int $id): array
    {
        $sqlQuery = 'SELECT * FROM types WHERE id = :id';
        $statement = $this->databaseManager->connection->prepare($sqlQuery);
        $statement->execute([':id' => $id]);

        return $statement->fetchAll(pdo::FETCH_ASSOC);
    }

    // Get all
    public function get(): PDOStatement
    {
        $query = "SELECT * FROM pokemon";
        $result = $this->databaseManager->connection->query($query);
        return $result;
    }

    public function update(): void
    {
        $query = "UPDATE pokemon SET name = :name, lvl = :lvl, type = :type WHERE id = :id;";
        $this->databaseManager->connection->query($query);
    }

    public function delete(int $id): void
    {
        $query = "DELETE FROM pokemon WHERE id =".$_GET['id'];
        $this->databaseManager->connection->query($query);
    }

}
