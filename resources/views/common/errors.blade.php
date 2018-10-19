Route::post('/task', function (Request $request) {
$validator = Validator::make($request->all(), [
'name' => 'required|max:255',
]);

if ($validator->fails()) {
return redirect('/')
->withInput()
->withErrors($validator);
}

// 建立該任務...
});
/**
 * Created by PhpStorm.
 * User: 曾敏華
 * Date: 2018/10/19
 * Time: 下午 02:00
 */