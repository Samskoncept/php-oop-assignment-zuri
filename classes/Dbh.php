
<?php class Dbh
{
    private $hostname;
    private $username;
    private $password;
    private $dbname;

    protected function connect()
    {
        $this->hostname = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'zuriphp';

        $connect_db = new mysqli(
            $this->hostname,
            $this->username,
            $this->password,
            $this->dbname
        );
        return $connect_db;
    }
}
