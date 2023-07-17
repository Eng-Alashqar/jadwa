
<x-admin.master title=" تعديل باقة">
    <x-page.title :route="route('admin.packages.index')" title="المهام" title_2="تعديل باقة " />
    <form action="{{ route('admin.packages.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <x-form.card card_lable="تعديل باقة  ">

            <x-form.input name="name_ar" lable="الاسم بالعربية"  :value="$package->name_ar"/>
            <x-form.input name="name_en" lable="الاسم بالانجليزية" :value="$package->name_en"  />
            <x-form.select lable="اختر المهام الخاصة بالباقة" name="task_ids">
                <select name="task_ids[]" multiple id="" class="form-select testselect2">
                    @foreach ($tasks as $task)
                    <option value="{{ $task->id }}" @selected($task->id == in_array($package->tasks->toArray()))>{{ $task->name_ar }}</option>
                    @endforeach
                </select>
            </x-form.select>
            <x-form.input name="total_time" lable="عدد الساعات الكلي"  type="number" min=0 :vlaue="$package->total_time"/>
            <x-form.input name="total_price" lable="السعر الكلي"  type="number" min=0 :value="$package->total_price"/>


            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل" />
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
