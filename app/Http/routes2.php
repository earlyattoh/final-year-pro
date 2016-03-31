    

    // Admin Views

    Route::get('admin/home', function() {
        return view('admin.pages.dashboard');
    });

    Route::get('admin/add-project', function() {
        return view('admin.pages.add-project');
    });

    Route::get('admin/addtopic', function() {
        return view('admin.pages.addtopic');
    });

    Route::get('admin/viewalloc', function() {
        return view('admin.pages.viewalloc');
    });

    Route::get('admin/students', function() {
        return view('admin.pages.students');
    });

    Route::get('admin/supervisors', function() {
        return view('admin.pages.supervisors');
    });

    Route::get('admin/grouping', function() {
        return view('admin.pages.grouping');
    });


// User Views
    Route::get('user/login', function() {
        return view('userauth.login');
    });

    Route::get('user/recoverpw', function() {
        return view('userauth.recoverpw');
    });

    Route::get('user/register', function() {
        return view('userauth.register');
    });

    Route::get('user/home', function() {
        return view('user.pages.home');
    });

    Route::get('user/search', function() {
        return view('user.pages.search');
    });

    Route::get('search', function() {
        return view('user.pages.allsearch');
    });

    Route::get('user/chapters-upload', function() {
        return view('user.pages.chapters-upload');
    });

    Route::get('user/final-upload', function() {
        return view('user.pages.final-upload');
    });

    Route::get('user/todo', function() {
        return view('user.pages.todo');
    });


// Supervisor Views
    Route::get('supervisor/login', function() {
        return view('supervisorauth.login');
    });

    Route::get('supervisor/recoverpw', function() {
        return view('supervisorauth.recoverpw');
    });

    Route::get('supervisor/register', function() {
        return view('supervisorauth.register');
    });

    Route::get('supervisor/home', function() {
        return view('supervisor.pages.home');
    });

    Route::get('supervisor/search', function() {
        return view('supervisor.pages.search');
    });

    Route::get('supervisor/search', function() {
        return view('supervisor.pages.allsearch');
    });

    Route::get('supervisor/addtopic', function() {
        return view('supervisor.pages.addtopic');
    });

    Route::get('supervisor/viewtopics', function() {
        return view('supervisor.pages.viewtopics');
    });