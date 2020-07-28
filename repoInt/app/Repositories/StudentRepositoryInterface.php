namespace App\Repositories;

interface StudentRepositoryInterface {

    public function getAllStudents();

    public function getStudentById($id);

}
