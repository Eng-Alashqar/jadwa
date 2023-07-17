<x-admin.master title="المستخدمين">
    <x-page.title :route="route('admin.users.index')" title="المستخدمين" title_2="قائمة  المستخدمين " />
    <x-page.table name='users' cardtitle="مستخدم">
        <x-slot name="th">
            <th>#</th>
            <th>الاسم</th>
            <th>الإيميل</th>
            <th>الصلاحيات</th>
            <th> تاريخ اخر تعديل</th>
            <th>العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($users as $key => $i)
                <tr>
                    <td width="2%">{{ $loop->iteration }}</td>
                    <td width="70%">{{ $i->name }}</td>
                    <td width="5%">{{ $i->email }}</td>
                    <td width="10%">
                        @if (!empty($i->getRoleNames()))
                            @foreach ($i->getRoleNames() as $v)
                                <span class="tag tag-blue">{{ $v }}</span>
                            @endforeach
                        @endif
                    </td>
                    <td width="10%">{{ $i->created_at->format('y-m-d/h:m') }}</td>
                    <td width="10%">
                        <x-page.td-actions :id="$i->id" name="users" />
                        <a class="btn btn-sm btn-success" href="{{ route('admin.users.show', $i->id) }}"><span
                                class="fe fe-eye"></a>
                    </td>
                </tr>
            @endforeach

        </x-slot>
    </x-page.table>
    @push('scripts')
        <x-form.delete name="users" />
    @endpush
</x-admin.master>
