<x-admin.master title=" عرض المستخدم">
    <x-page.title :route="route('admin.users.index')" title="المستخدم" title_2="عرض مستخدم " />
    <div class="card p-3">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>الاسم:</strong>
                    {{ $user->name }}
                </div>
                <div class="form-group">
                    <strong>الايميل:</strong>
                    {{ $user->email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>الصلاحيات:</strong>
                    @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $v)
                            <label class="tag tag-success text-white">{{ $v }}</label>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <a class="btn btn-primary" href="{{ route('admin.users.index') }}">رجوع</a>
    </div>
    </div>
    </div>
    </div>

</x-admin.master>
