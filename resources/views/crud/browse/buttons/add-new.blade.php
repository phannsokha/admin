<a href="{{ route('admin.'.$dataType->slug.'.create') }}?{{ request()->getQueryString() }}" class="btn btn-success btn-add-new">
    <i class="admin-plus"></i> <span>{{ __('admin.generic.add_new') }}</span>
</a>
