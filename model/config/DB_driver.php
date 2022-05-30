<?php
// Thư Viện Xử Lý Database
class DB_driver
{
    public $__conn,
        $localhost = "localhost",
        $user = "root",
        $pass = "",
        $DbName = "shop";

    // Hàm Kết Nối
    function connect()
    {
        if (!$this->__conn) {
            // Kết nối
            $this->__conn = mysqli_connect($this->localhost, $this->user, $this->pass, $this->DbName) or die('Connect Error');
            // Xử lý truy vấn UTF8 để tránh lỗi font
            mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
            mysqli_query($this->__conn, "set names 'utf8'");
            mysqli_set_charset($this->__conn, "utf8");
        }
    }

    // Hàm Ngắt Kết Nối
    function dis_connect()
    {
        if ($this->__conn) {
            mysqli_close($this->__conn);
        }
    }

    // Hàm Insert
    function insert($table, $data)
    {
        $this->connect();
        $value_list = '';

        // Lặp qua data
        foreach ($data as $key => $value) {
            $value_list .= ",'" . mysqli_escape_string($this->__conn, $value) . "'";
        }
        $resultValue = trim($value_list,',');
        // Vì sau vòng lặp các biến $field_list và $value_list sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
        $sql = 'INSERT INTO ' . $table . ' VALUES ('.$resultValue.')';
        return mysqli_query($this->__conn, $sql);
    }

    // Hàm Update
    function update($table, $data, $where)
    {
        $this->connect();
        $sql = '';
        foreach ($data as $key => $value) {
            $sql .= "$key = '" . mysqli_escape_string($this->__conn, $value) . "',";
        }
        $sql = 'UPDATE ' . $table . ' SET ' . trim($sql, ',') . ' WHERE ' . $where;
        return mysqli_query($this->__conn, $sql);
    }

    // Hàm delete
    function remove($table, $where)
    {
        $this->connect();
        $sql = "DELETE FROM $table WHERE $where";
        return mysqli_query($this->__conn, $sql);
    }

    // Hàm lấy danh sách
    function get_list($sql)
    {
        $this->connect();
        $result = mysqli_query($this->__conn, $sql);
        if (!$result) {
            die('sql query wrong ! ' . $sql);
        }

        $return = array();
        // Lặp qua kết quả để đưa vào mảng
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
        }
        // Xóa kết quả khỏi bộ nhớ
        mysqli_free_result($result);
        return $return;
    }

    // Hàm lấy 1 record dùng trong trường hợp lấy chi tiết tin
    function get_row($sql)
    {
        $this->connect();
        $result = mysqli_query($this->__conn, $sql);
        if (!$result) {
            die('sql query wrong ! ' . $sql);
        }
        $row = mysqli_fetch_assoc($result);
        // Xóa kết quả khỏi bộ nhớ
        mysqli_free_result($result);

        if ($row) {
            return $row;
        }
        return false;
    }
}
