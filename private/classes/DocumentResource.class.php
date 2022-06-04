<?php class DocumentResource extends DatabaseObject
{
    protected static $table_name = "documentResource";
    protected static $db_columns = ['id', 'document_id', 'filename', 'elemId','tool_name', 'tool_pos_top', 'tool_pos_left', 'created_at', 'updated_at', 'created_by', 'deleted'];

    public $id;
    public $document_id;
    public $filename;
    public $elemId;
    public $tool_name;
    public $tool_pos_top;
    public $tool_pos_left;
    public $created_at;
    public $updated_at;
    public $created_by;
    public $deleted;


    public $counts;

  

    public function __construct($args = [])
    {
        $this->document_id = $args['document_id'] ?? '';
        $this->filename = $args['filename'] ?? '';
        $this->elemId = $args['elemId'] ?? '';
        $this->tool_name = $args['tool_name'] ?? '';
        $this->tool_pos_top    = $args['tool_pos_top'] ?? '';
        $this->tool_pos_left      = $args['tool_pos_left'] ?? 2;
        $this->created_by  = $args['created_by'] ?? '';
        $this->updated_at  = $args['updated_at'] ?? '';
        $this->created_at  = $args['created_at'] ?? date('Y-m-d H:i:s');
        $this->deleted     = $args['deleted'] ?? '';
    }

    public static function find_by_document_ids($document_id)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE document_id ='" . self::$database->escape_string($document_id) . "'";
        $sql .= " AND (deleted IS NULL OR deleted = 0 OR deleted = '') ";
        $sql .= " ORDER BY id ASC ";
        return static::find_by_sql($sql);
    }
     public static function find_by_created_by($created_by)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE $created_by ='" . self::$database->escape_string($created_by) . "'";
        $sql .= " AND (deleted IS NULL OR deleted = 0 OR deleted = '') ";
        $sql .= " ORDER BY id ASC ";
        return static::find_by_sql($sql);
    }
    
    public static function find_by_document_id($document_id)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE document_id ='" . self::$database->escape_string($document_id) . "'";
        $sql .= " AND (deleted IS NULL OR deleted = 0 OR deleted = '') ";
        $sql .= " ORDER BY id DESC ";
        $obj_array = static::find_by_sql($sql);
        if (!empty($obj_array)) {
            return $obj_array;
        } else {
            return false;
        }
    }

    //  public static function find_by_element_id($elemId)
    // {
    //     $sql = "SELECT * FROM " . static::$table_name . " ";
    //     $sql .= "WHERE elemId ='" . self::$database->escape_string($elemId) . "'";
    //     $sql .= " AND (deleted IS NULL OR deleted = 0 OR deleted = '') ";
    //     $sql .= " ORDER BY id DESC ";
    //     return static::find_by_sql($sql);
    //     // $obj_array = static::find_by_sql($sql);
    //     // if (!empty($obj_array)) {
    //     //     return $obj_array;
    //     // } else {
    //     //     return false;
    //     // }
    // }

    static public function find_by_element_id($elemId) {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE elemId='" . self::$database->escape_string($elemId) . "'";
        $obj_array = static::find_by_sql($sql);
        if(!empty($obj_array)) {
        return array_shift($obj_array);
        } else {
        return false;
        }
    }

    
}