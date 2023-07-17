
<x-admin.master title=" إضافة باقة">
    <x-page.title :route="route('admin.packages.index')" title="المهام" title_2="اضافة باقة " />
    <form action="{{ route('admin.packages.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <x-form.card card_lable="اضافة باقة  ">

            <x-form.input name="name_ar" lable="الاسم بالعربية"  />
            <x-form.input name="name_en" lable="الاسم بالانجليزية"  />
            <x-form.select lable="اختر المهام الخاصة بالباقة" name="task_ids">
                <select name="task_ids[]" multiple id="" class="form-select testselect2">
                    @foreach ($tasks as $task)
                    <option value="{{ $task->id }}">{{ $task->name_ar }}</option>
                    @endforeach
                </select>
            </x-form.select>
            <x-form.input name="total_time" lable="عدد الساعات الكلي"  type="number" min=0/>
            <x-form.input name="total_price" lable="السعر الكلي"  type="number" min=0/>


            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="إضافة" />
                    <x-form.a :route="route('admin.packages.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>
@push('scripts')
<script src="{{ asset('assets2/js/advanced-form-elements.js') }}"></script>
<script src="{{ asset('assets2/js/select2.js') }}"></script>
@endpush
</x-admin.master>
