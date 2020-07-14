namespace App\Http\Controllers;

// use Symfony\Component\HttpFoundation\Session\Session;
// use Session;
use Illuminate\Support\Facades\Session;
use App\Siswa;

use App\Imports\SiswaImport;
// use Maatwebsite\Excel\Cell;
// use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
//
$siswa = Siswa::all();

return view('siswa/siswa', compact('siswa'));
}

public function import_excel(Request $request)
{
// validasi
$this->validate($request, [
'file' => 'required|mimes:csv,xls,xlsx'
]);


// $dataTime = date('Ymd_His');

// menangkap file excel
$file = $request->file('file');

// $nama_file = $dataTime . '-' . $file->getClientOriginalName();

// membuat nama file unik
$nama_file = rand() . $file->getClientOriginalName();

// upload ke folder file_siswa di dalam folder public
$file->move('file_siswa', $nama_file);

// import data
Excel::import(new SiswaImport, public_path('/file_siswa/' . $nama_file));

// notifikasi dengan session
Session::flash('sukses', 'Data Siswa Berhasil Diimport!');

// alihkan halaman kembali
// return redirect('siswa/siswa');
return redirect()->route('test.index');
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
//
}

/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
//
}

/**
* Display the specified resource.
*
* @param \App\Siswa $siswa
* @return \Illuminate\Http\Response
*/
public function show(Siswa $siswa)
{
//
<!-- $sukses = Session::flash('sukses', 'Ini notifikasi SUKSES');
return redirect('/siswa', compact('sukses')); -->
}

/**
* Show the form for editing the specified resource.
*
* @param \App\Siswa $siswa
* @return \Illuminate\Http\Response
*/
public function edit(Siswa $siswa)
{
//
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Siswa $siswa
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Siswa $siswa)
{
//
}

/**
* Remove the specified resource from storage.
*
* @param \App\Siswa $siswa
* @return \Illuminate\Http\Response
*/
public function destroy(Siswa $siswa)
{
//
}
}
public function import_excel(Request $request)
{
// dd($request->all());
// validasi
$this->validate($request, [
'file' => 'required|mimes:csv,xls,xlsx'
// 'file' => 'required',
]);


// $dataTime = date('Ymd_His');

// menangkap file excel
$file = $request->file('file');

// $nama_file = $dataTime . '-' . $file->getClientOriginalName();

// membuat nama file unik
$nama_file = rand() . $file->getClientOriginalName();

// upload ke folder file_siswa di dalam folder public
$file->move('file_upload', $nama_file);

// import data


$data = Excel::import(new ProdukImport, public_path('/file_upload/' . $nama_file));
dump($data);
// notifikasi dengan session
Session::flash('sukses', 'Data Produk Berhasil Diimport!');

// alihkan halaman kembali
// return redirect('siswa/siswa');
return redirect()->route('produk.index');
}