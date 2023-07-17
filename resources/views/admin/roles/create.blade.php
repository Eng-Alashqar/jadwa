    <x-admin.master title=" إضافة صلاحية">
        <x-page.title :route="route('admin.roles.index')" title="ألصلاحيات" title_2="اضافة صلاحية " />
        <form action="{{ route('admin.roles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.card card_lable="اضافة صلاحية  ">


                <x-form.input name="name" lable="الإسم " />
                <div class="mb-4 main-content-label">المحددات</div>
                @foreach ($permission as $value)
                    <label>{{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) }}
                        {{ $value->name }}</label>
                    <br />
                @endforeach
                <x-slot name="footer">
                    <x-form.card-footer>
                        <x-form.button title="إضافة" />
                        <x-form.a :route="route('admin.roles.index')" title=" رجوع " />
                    </x-form.card-footer>
                </x-slot>

            </x-form.card>
        </form>

    </x-admin.master>
