{{-- @extends('dashbord.layouts.master')
@section('content')
    <div class="main-content app-content">
        <div class="main-container container-fluid">
            <div class="breadcrumb-header justify-content-between">
                <div class="my-auto">
                    <div class="d-flex">
                        <h4 class="content-title mb-0 my-auto">Courses</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/
                            Create</span>
                    </div>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger mx-5">
                @foreach ($errors->all() as $error)
                    <ul>
                        <li>
                            {{ $error }}
                        </li>
                    </ul>
                @endforeach
            </div>
        @endif
      @can('course-create')
        <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (session('msg'))
                <div class="col-md-10 mx-5">
                    <h3 class=" alert alert-{{ session('type') }} w-100 ">{{ session('msg') }}</h3>
                </div>
            @endif
            <div class="row  m-5">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                                Create Course
                            </div>
                            <p class="mg-b-20"></p>
                            <div id="wizard1">
                                <h3>Courses</h3>
                                <section>
                                    <div class="control-group form-group">
                                        <label class="form-label">Course Image</label>
                                        <input type="file" class="form-control required" name="course_image" value="{{ old('course_image') }}"
                                            id="course_image">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Course Ar.</label>
                                        <input type="text" class="form-control required" name="course_ar" value="{{ old('course_ar') }}"
                                            placeholder="Course Name in Arabic">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Course En.</label>
                                        <input type="text" class="form-control required" name="course_en" value="{{ old('course_en') }}"
                                            placeholder="Course Name in English">
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4 control-group form-group">
                                            <label class="form-label">Start At</label>
                                            <input type="date" class="form-control required" name="start_at" value="{{ old('start_at') }}"
                                               >
                                        </div>
                                        <div class="col-sm-4 control-group form-group">
                                            <label class="form-label">Status</label>
                                            <select class="form-control"name="status" id="status">
                                                <option value="Active">Active</option>
                                                <option value="Full up">Full up</option>
                                                <option value="Expired">Expired</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 control-group form-group mb-0">
                                            <label class="form-label">Price</label>
                                            <input type="number" class="form-control required" name="price"
                                             placeholder="Price" value="{{ old('price') }}">
                                        </div>
                                    </div>
                                </section>
                                <h3>Course Details</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                    <div class="control-group form-group">
                                        <label class="form-label">Topics Ar</label>
                                        <textarea class="form-control required mb-2" name="topics_ar" value="{{ old('topics_ar') }}"
                                        placeholder="Topics  in Arabic"  rows="4"></textarea>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group form-group">
                                        <label class="form-label">Topics En</label>
                                        <textarea class="form-control required mb-2" name="topics_en" value="{{ old('topics_en') }}"
                                        placeholder="Topics In English" rows="4"></textarea>
                                    </div>
                                </div>

                                   </div>
                                   <div class="row">
                                <div class="col-md-6">
                                    <div class="control-group form-group">
                                        <label class="form-label">Objectives Ar</label>
                                        <input type="text" class="form-control required  mb-2" name="objectives1_ar" value="{{ old('objectives1_ar') }}"
                                        placeholder="Objectives  in Arabic">
                                        <input type="text" class="form-control required  mb-2" name="objectives2_ar" value="{{ old('objectives2_ar') }}"
                                        placeholder="Objectives  in Arabic">
                                        <input type="text" class="form-control required  mb-2" name="objectives3_ar" value="{{ old('objectives3_ar') }}"
                                        placeholder="Objectives  in Arabic">
                                        <input type="text" class="form-control required  mb-2" name="objectives4_ar" value="{{ old('objectives4_ar') }}"
                                        placeholder="Objectives  in Arabic">
                                        <input type="text" class="form-control required  mb-2" name="objectives5_ar" value="{{ old('objectives5_ar') }}"
                                        placeholder="Objectives  in Arabic">
                                        <input type="text" class="form-control required  mb-2" name="objectives6_ar" value="{{ old('objectives6_ar') }}"
                                        placeholder="Objectives  in Arabic">
                                    </div>

                                    </div>
                                    <div class="col-md-6">
                                    <div class="control-group form-group">
                                        <label class="form-label">objectives En</label>
                                        <input type="text" class="form-control required  mb-2" name="objectives1_en" value="{{ old('objectives1_en') }}"
                                        placeholder="Objectives In English">
                                        <input type="text" class="form-control required  mb-2" name="objectives2_en" value="{{ old('objectives2_en') }}"
                                        placeholder="Objectives In English">
                                        <input type="text" class="form-control required  mb-2" name="objectives3_en" value="{{ old('objectives3_en') }}"
                                        placeholder="Objectives In English">
                                        <input type="text" class="form-control required  mb-2" name="objectives4_en" value="{{ old('objectives4_en') }}"
                                        placeholder="Objectives In English">
                                        <input type="text" class="form-control required  mb-2" name="objectives5_en" value="{{ old('objectives5_en') }}"
                                        placeholder="Objectives In English">
                                        <input type="text" class="form-control required  mb-2" name="objectives6_en" value="{{ old('objectives6_en') }}"
                                        placeholder="Objectives In English">

                                    </div>
                                </div>

                                    </div>
                                </section>
                                <h3>Instructor</h3>
                                <section>
                                    <div class="control-group form-group">
                                        <label class="form-label">Instructor Image</label>
                                        <input type="file" class="form-control required" id="instructor_image"
                                            name="instructor_image" value="{{ old('instructor_image') }}">
                                    </div>

                                       <div class="control-group form-group">
                                        <label class="form-label">Instructor Name Ar.</label>
                                        <input type="text" class="form-control required" id="instructor_name_ar"
                                            name="instructor_name_ar" value="{{ old('instructor_name_ar') }}" placeholder="Instructor Name in Arabic">
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Instructor Name En.</label>
                                        <input type="text" class="form-control required" id="instructor_name_en"
                                            name="instructor_name_en" value="{{ old('instructor_name_en') }}" placeholder="Instructor Name in English" >
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Instructor En.</label>
                                        <input type="text" class="form-control required" id="instructor_en"
                                            name="instructor_en" value="{{ old('instructor_en') }}" placeholder="Instructor info in English" >
                                    </div>
                                    <div class="control-group form-group">
                                        <label class="form-label">Instructor Ar.</label>
                                        <input type="text" class="form-control required" id="instructor_ar"
                                            name="instructor_ar" value="{{ old('instructor_ar') }}" placeholder="Instructor info in Arabic">
                                    </div>

                                </section>
                            </div>

                            <button type="submit" class="btn btn-primary text-light mt-3 w-25">Save</button>
                            <a class="btn btn-primary text-light mt-3" href="{{route('admin.courses.index')}}" >Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @endcan
    </div>
@endsection

@section('scripts')
    <!--Internal  Form-wizard js -->
    <script src="{{ asset('assets2/js/form-wizard.js') }}"></script>
    <script src="{{ asset('assets2/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/parsleyjs/parsley.min.js') }}"></script>
@endsection --}}

<x-admin.master title=" إضافة دورة">
    <x-page.title :route="route('admin.courses.index')" title="الخبراء" title_2="اضافة دورة " />
    <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <x-form.card card_lable="اضافة دورة  ">

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4 main-content-label">بيانات الدورة</div>
                    <x-form.input name="course_image" lable="صورة" type="file" />
                    <x-form.input name="course_ar" lable="الاسم بالعربية" />
                    <x-form.input name="course_en" lable="الاسم بالإنجليزية" />
                    <x-form.input name="start_at" lable=" تاريخ الإنتهاء" type="date" />
                    <x-form.select name="status" lable="الحالة">
                        <select class="form-control"name="status" id="status">
                            <option value="Active"> مرحلة التسجيل</option>
                            <option value="Full up"> العدد مكتمل</option>
                            <option value="Expired">منتهي</option>
                        </select>
                    </x-form.select>
                    <x-form.input name="price" lable="السعر" type="number" min="0" />
                </div>
                <div class="col-md-6">
                    <div class="mb-4 main-content-label">بيانات المدرب</div>
                    <x-form.input name="instructor_image" lable="صورة" type="file" />
                    <x-form.input name="instructor_name_ar" lable="الإسم بالعربية" />
                    <x-form.input name="instructor_name_en" lable="الإسم بالإنجليزية" />
                    <x-form.input name="instructor_ar" lable="وصفه  عربي" />
                    <x-form.input name="instructor_en" lable=" وصفه انجليزي" />
                </div>
            </div>
            <div class="mb-4 main-content-label"> موضوعات الدورة</div>

            <div class="row">
                <div class="col-md-12 my-4">
                    <div id="objectives_ar">
                        <div class="row" id="element-input">
                            <div class="col-md-11">
                                <x-form.input name="objectives_ar[]" lable=" إضافة بيانات عربي" />
                            </div>
                            <div class="col-md-1">
                                <span class="btn btn-danger" onclick="destroyElements(this)"><i
                                        class="fa fa-trash"></i></span>
                            </div>
                        </div>
                    </div>
                    <span class="btn btn-success" onclick="add_btn2()"><i class="fa fa-plus"></i></span>
                </div>
                <br>
                <hr class="w-75">

                <div class="col-md-12  my-4">
                    <div id="objectives_en">
                        <div class="row" id="element-input">
                            <div class="col-md-11">
                                <x-form.input name="objectives_en[]" lable="إضافة  بيانات انجليزي " />
                            </div>
                            <div class="col-md-1">
                                <span class="btn btn-danger" onclick="destroyElements(this)"><i
                                        class="fa fa-trash"></i></span>
                            </div>
                        </div>
                    </div>
                    <span class="btn btn-success" onclick="add_btn()"><i class="fa fa-plus"></i></span>
                </div>
            </div>
            <div class="row">
                <div class="mb-4 main-content-label"> معلومات إضافية</div>
                <div class="col-md-6">
                    <x-form.textarea name="topics_ar" lable="  وصف الدورة بالعربية" />
                </div>
                <div class="col-md-6">
                    <x-form.textarea name="topics_en" lable="  وصف الدورة  بالانجليزية" />
                </div>
            </div>


            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="إضافة" />
                    <x-form.a :route="route('admin.courses.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>
    @push('scripts')
    <script>
        function add_btn() {
            let x = document.getElementById("objectives_en");
            x.innerHTML += `
            <div class="row" id="element-input">
                        <div class="col-md-11">
                            <x-form.input name="objectives_en[]" lable="إضافة  بيانات انجليزي " />

                        </div>
                        <div class="col-md-1">
                            <span class="btn btn-danger" onclick="destroyElements(this)"><i class="fa fa-trash"></i></span>
                        </div>
                    </div>`;
        }

        function add_btn2() {
            let x = document.getElementById("objectives_ar");
            x.innerHTML += `
            <div class="row" id="element-input">
                    <div class="col-md-11">
                        <x-form.input name="objectives_ar[]" lable=" إضافة بيانات عربي" />

                    </div>
                    <div class="col-md-1">
                        <span class="btn btn-danger" onclick="destroyElements(this)"><i class="fa fa-trash"></i></span>
                    </div>
                </div>`;
        }
        function destroyElements(element) {
            let n = element.closest('div #element-input');
            console.log(n)
            n.remove()

        }
    </script>
    @endpush
</x-admin.master>
