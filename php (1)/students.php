<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();

    // Lấy danh sach sinh viên trong session
    function getAllStudents()
    {
        return isset($_SESSION['students']) ? $_SESSION['students'] : array();
    }
    
    // Lấy chi tiết một sinh viên dựa vào sinh viên id
    function getStudent($student_id)
    {
        // Lấy danh sách sinh viên để tìm
        $students = getAllStudents();
         
        // Duyệt qua từng phần tử, nếu xuất hiện ID giống nhau thì tức là đã tìm thấy sinh viên
        foreach ($students as $item)
        {
            if ($item['student_id'] == $student_id){
                return $item;
            }
        }
         
        return array();
    }
    
    // Xóa sinh viên bởi sinh viên ID
    function deleteStudent($student_id)
    {
        // Lấy danh sách sinh viên để tìm
        $students = getAllStudents();
         
        /// Duyệt qua từng phần tử, nếu xuất hiện ID giống nhau thì tức là đã tìm thấy sinh viên
        foreach ($students as $key => $item)
        {
            // Đã tìm thấy thì dùng hàm unset để xóa
            if ($item['student_id'] == $student_id){
                unset($students[$key]);
            }
        }
         
        // Cập nhật lại Session
        $_SESSION['students'] = $students;
         
        return $students;
    }
    
    // Hàm thêm và sửa sinh viên
    function updateStudent($student_id, $student_name, $student_email , $student_qq, $student_sdt)
    {
        // Lấy danh sách sinh viên
        $students = getAllStudents();
         
        // Khai báo cấu trúc lưu trữ một sinh viên
        $new_student = array(
            'student_id' => $student_id,
            'student_name' => $student_name,
            'student_email' => $student_email,
            'student_qq' => $student_qq,
            'student_sdt' => $student_sdt

        );
         
        // Trường hợp update
        $is_update_action = false;
        foreach ($students as $key => $item)
        {
            if ($item['student_id'] == $student_id){
                $students[$key] = $new_student;
                $is_update_action = true; // khai báo đây là action update
            }
        }
         
        // Trường hợp add, tứ là $is_update_action = false
        if (!$is_update_action){
            $students[] = $new_student;
        }
         
        // Cập nhật dữ liệu trong Session
        $_SESSION['students'] = $students;
         
        return $students;
    }
    ?>
</body>
</html>

