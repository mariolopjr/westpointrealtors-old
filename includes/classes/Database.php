<?php
namespace techmunchies\functions;

/*
 * Database Class
 *
 * @package Sherlock
 * @subpackage Classes
 * @since 0.0.1
 */

class Database {
    
    /*
     * SQL Database Connection
     *
     * @since 0.0.1
     *
     * @access protected
     * @var string
     */
    protected $dbh;
    
    /*
     * SQL Database Type
     *
     * @since 0.0.1
     *
     * @access protected
     * @var string
     */
    protected $dbType;
     
    /*
     * SQL Database Hostname
     *
     * @since 0.0.1
     *
     * @access protected
     * @var string
     */
    protected $dbHostname;
    
    /*
     * SQL Database Name
     *
     * @since 0.0.1
     *
     * @access protected
     * @var string
     */
    protected $dbName;
    
    /*
     * SQL Database Username
     *
     * @since 0.0.1
     *
     * @access protected
     * @var string
     */
    protected $dbUsername;
      
    /*
     * SQL Database Password
     *
     * @since 0.0.1
     *
     * @access protected
     * @var string
     */
    protected $dbPassword;
      
    /*
     * SQL Database Port
     *
     * @since 0.0.1
     *
     * @access protected
     * @var int
     */
    protected $dbPort;
    
    /*
     * SQL Database Charset
     *
     * @since 0.0.1
     *
     * @access protected
     * @var string
     */
    protected $dbCharset;
    
    /*
    * Creates a connection to the database server and connects to the required
    * database.
    *
    * @since 0.0.1
    *
    * @param string $dbType     SQL Database Type
    * @param string $dbHostname SQL Database Hostname
    * @param string $dbName     SQL Database Name
    * @param string $dbUser     SQL Database Username
    * @param string $dbPassword SQL Database Password
    * @param int    $dbPort     SQL Database Port
    * @param string $dbCharset  SQL Database Charset
    */
    public function __construct (
        $dbType,
        $dbHostname,
        $dbName,
        $dbUsername,
        $dbPassword,
        $dbPort,
        $dbCharset
    ) {
        // Sets all the variables needed to establish a SQL connection
        $this->dbType     = $dbType;
        $this->dbHostname = $dbHostname;
        $this->dbName     = $dbName;
        $this->dbUsername = $dbUsername;
        $this->dbPassword = $dbPassword;
        $this->dbPort     = $dbPort;
        $this->dbCharset  = $dbCharset;
        
        // Establishes a database connection
        $this->establishDBConnection ();
    }
    
    /*
     * Establishes a connection to the SQL database
     *
     * @since 0.0.1
     *
     * @return boolean Returns whether the connection was successful or not
     */
    public function establishDBConnection () {
        
        // Sets PDO connection based upon database type
        switch ( $this->dbType ) {
            case "MYSQL":
                $dsn   = "mysql:host=$this->dbHostname;dbname=$this->dbName;port=$this->dbPort;charset=$this->dbCharset;";
                break;
                
            case "SQLSRV":
                $dsn = "sqlsrv:Server=$this->dbHostname;Database=$this->dbName;";
                break;
            
            default:
                error_log ( lang ( "UNRECOGNIZED_DB_TYPE" ) );
                break;

            try {
                $this->dbh = new \PDO ( $dsn, $this->dbUsername, $this->dbPassword );
            } catch ( \PDOException $exception ) {
                error_log ( $exception->getMessage( ) );
                error_log ( $exception->getCode( ) );
            }
        }

        // Check connection
        if ( $this->dbh === false ) {
            $this->dbh = null;
            
            // If the connection failed, return false
            return false;
        }
        // If the connection succeeded, return true
        return true;
    }
    
    /*
     * SQL $dbh Getter
     *
     * @since 0.0.1
     *
     * @return string Returns the $dbh database connection
     */
    public function getDBH ()
    {
        return $this->dbh;
    }
}
