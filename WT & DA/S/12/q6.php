<?php
$teachers = [
    "Dr. Sharma" => ["tno" => "T001", "qualification" => "PhD", "salary" => "₹80,000"],
    "Ms. Verma" => ["tno" => "T002", "qualification" => "MSc", "salary" => "₹60,000"],
    "Mr. Patil" => ["tno" => "T003", "qualification" => "MTech", "salary" => "₹70,000"]
];

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    if (array_key_exists($name, $teachers)) {
        $teacher = $teachers[$name];
        echo "<p><strong>Teacher No:</strong> {$teacher['tno']}</p>";
        echo "<p><strong>Qualification:</strong> {$teacher['qualification']}</p>";
        echo "<p><strong>Salary:</strong> {$teacher['salary']}</p>";
    } else {
        echo "Teacher not found.";
    }
}
?>
