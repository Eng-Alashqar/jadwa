
    <x-admin.master title=" تعديل صلاحية">
        <x-page.title :route="route('admin.roles.index')" title="ألصلاحيات" title_2="اضافة صلاحية " />
        <form action="{{ route('admin.roles.update',$role->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <x-form.card card_lable="اضافة صلاحية  ">


                <x-form.input name="name" lable="الإسم" :value="$role->name" />
                <div class="mb-4 main-content-label">المحددات</div>
                @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                {{ $value->name }}</label>
            <br/>
            @endforeach
                <x-slot name="footer">
                    <x-form.card-footer>
                        <x-form.button title="تعديل" />
                        <x-form.a :route="route('admin.roles.index')" title=" رجوع " />
                    </x-form.card-footer>
                </x-slot>

            </x-form.card>
        </form>

    </x-admin.master>
