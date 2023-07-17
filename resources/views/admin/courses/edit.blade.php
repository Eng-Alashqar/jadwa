
<x-admin.master title=" تعديل بيانات {{ $course->course_ar }}">
    <x-page.title :route="route('admin.courses.index')" title="الدورات" title_2=" تعديل بيانات {{ $course->course_ar }}  " />
    <form action="{{ route('admin.courses.update',$course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <x-form.card card_lable="  تعديل بيانات {{ $course->course_ar }}  ">

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4 main-content-label">بيانات الدورة</div>
                    <x-form.input name="course_image" lable="صورة" type="file" />
                    <x-form.input :value="$course->course_ar" name="course_ar" lable="الاسم بالعربية" />
                    <x-form.input :value="$course->course_en" name="course_en" lable="الاسم بالإنجليزية" />
                    <x-form.input :value="$course->start_at" name="start_at" lable=" تاريخ الإنتهاء" type="date" />
                    <x-form.select name="status" lable="الحالة">
                        <select class="form-control"name="status" id="status">
                            <option value="Active"  @selected($course->status == 'Active')> مرحلة التسجيل</option>
                            <option value="Full up" @selected($course->status == 'Full up')> العدد مكتمل</option>
                            <option value="Expired" @selected($course->status == 'Expired')>منتهي</option>
                        </select>
                    </x-form.select>
                    <x-form.input :value="$course->price" name="price" lable="السعر" type="number" min="0" />
                </div>
                <div class="col-md-6">
                    <div class="mb-4 main-content-label">بيانات المدرب</div>
                    <x-form.input name="instructor_image" lable="صورة" type="file" />
                    <x-form.input :value="$course->instructor_name_ar" name="instructor_name_ar" lable="الإسم بالعربية" />
                    <x-form.input :value="$course->instructor_name_en" name="instructor_name_en" lable="الإسم بالإنجليزية" />
                    <x-form.input :value="$course->instructor_ar" name="instructor_ar" lable="وصفه  عربي" />
                    <x-form.input :value="$course->instructor_en" name="instructor_en" lable=" وصفه انجليزي" />
                </div>
            </div>
            <div class="mb-4 main-content-label"> موضوعات الدورة</div>

            <div class="row">
                <div class="col-md-12 my-4">
                    <div id="objectives_ar">
                        @foreach ($objectives_ar as $i)

                        <div class="row" id="element-input">
                            <div class="col-md-11">
                                <x-form.input :value="$i" name="objectives_ar[]" lable=" إضافة بيانات عربي" />
                            </div>
                            <div class="col-md-1">
                                <span class="btn btn-sm btn-danger" onclick="destroyElements(this)"><i
                                        class="fa fa-trash"></i></span>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <span class="btn btn-success" onclick="add_btn2()"><i class="fa fa-plus"></i></span>
                </div>
                <br>
                <hr class="w-75">

                <div class="col-md-12  my-4">
                    <div id="objectives_en">
                        @foreach ($objectives_en as $i)

                        <div class="row" id="element-input">
                            <div class="col-md-11">
                                <x-form.input :value="$i" name="objectives_en[]" lable="إضافة  بيانات انجليزي " />

                            </div>
                            <div class="col-md-1">
                                <span class="btn btn-sm  btn-danger" onclick="destroyElements(this)"><i
                                        class="fa fa-trash"></i></span>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <span class="btn btn-success" onclick="add_btn()"><i class="fa fa-plus"></i></span>
                </div>
            </div>
            <div class="row">
                <div class="mb-4 main-content-label"> معلومات إضافية</div>
                <div class="col-md-6">
                    <x-form.textarea  :value="$course->topics_ar" name="topics_ar" lable="  وصف الدورة بالعربية" />
                </div>
                <div class="col-md-6">
                    <x-form.textarea :value="$course->topics_en" name="topics_en" lable="  وصف الدورة  بالانجليزية" />
                </div>
            </div>


            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل" />
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
                            <x-form.input  name="objectives_en[]" lable="إضافة  بيانات انجليزي " />

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
                        <x-form.input  name="objectives_ar[]" lable=" إضافة بيانات عربي" />

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
