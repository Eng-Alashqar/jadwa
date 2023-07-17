<x-admin.master title="الدورات">
    <x-page.title :route="route('admin.courses.index')" title="الدورات" title_2="قائمة  الدورات " />
    <x-page.table name='courses' cardtitle="دورة">

        <x-slot name="th">
            <th>#</th>
            <th>الصورة</th>
            <th>الإسم</th>
            <th> تاريخ اخر تعديل</th>
            <th>العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($courses as $i)
                <tr>
                    <td width="1%">{{ $loop->iteration }}</td>
                    <td width="5%">
                        <x-page.td-image :image="$i->course_image" />
                    </td>
                    <td width="70%">{{ $i->course_ar }}  </td>
                    <td width="10%">{{ $i->created_at->format('y-m-d/h:m') }}</td>
                    <td width="10%">
                        <x-page.td-actions :id="$i->id" name="courses" />
                    </td>
                </tr>
            @endforeach

        </x-slot>
    </x-page.table>
    @push('scripts')
        <x-form.delete name="courses" />
    @endpush
</x-admin.master>
