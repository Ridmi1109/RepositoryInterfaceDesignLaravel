namespace App\Repositories;

use App\Repositories\StudentRepositoryInterface;

class StudentRepository extends StudentRepositoryInterface{

    public function getAllStudents()
    {
        return Student::all();
    }

    public function getStudentById($id))
    {
        return Student::find($id);
    }


}
