<x-admin.master title=" إضافة مستخدم">
    <x-page.title :route="route('admin.users.index')" title="المستخدمين" title_2="اضافة مستخدم" />


    {{-- @can('users-create') --}}
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <x-form.card card_lable="اضافة مستخدم ">

            <x-form.input name="name" lable="الاسم" />
            <x-form.input name="email" lable="البريد الاكتروني" type="email" />
            <x-form.input name="password" lable=" كلمة المرور" type="password" />
            <x-form.input name="confirm-password" lable=" تاكيد كلمة المرور" type="password" />


            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <strong class="form-label">الصلاحيات:</strong>
                    </div>
                    <div class="col-md-10">
                        <div class="" tabindex="0" role="button" aria-expanded="true">
                            <select class="form-select" tabindex="-1" name="role_name[]" multiple>
                                @forelse ($roles as $i)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @empty
                                @endforelse

                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="اضافة صلاحيات " />
                    <x-form.a :route="route('admin.users.index')" title="عودة الى الوراء" />
                </x-form.card-footer>
            </x-slot>
        </x-form.card>
    </form>
    {{-- @endcan --}}
    </div>
    </div>
    <!-- /Col -->

    </div>
    <!-- row closed -->

    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->

</x-admin.master>
