namespace App;

// use Session;
use Illuminate\Support\Facades\Session;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Cell;
// use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
//
protected $table = 'siswa';
public $timestamps = true;
const CREATED_AT = null;
const UPDATED_AT = null;

protected $fillable = ['nama', 'nis', 'alamat'];


// public function import_excel($request)
// {
// // validasi
// $this->validate($request, [
// 'file' => 'required|mimes:csv,xls,xlsx'
// ]);

// // menangkap file excel
// $file = $request->file('file');

// // membuat nama file unik
// $nama_file = rand() . $file->getClientOriginalName();

// // upload ke folder file_siswa di dalam folder public
// $file->move('file_siswa', $nama_file);

// // import data
// Excel::import(new SiswaImport, public_path('/file_siswa/' . $nama_file));

// // notifikasi dengan session
// Session::flash('sukses', 'Data Siswa Berhasil Diimport!');

// // alihkan halaman kembali
// return redirect('/siswa');
// }
}