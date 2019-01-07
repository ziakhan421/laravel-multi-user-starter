<div class="order-actions">
    @if(empty($canEdit) || empty($canDelete))
        <button type="button" class="btn btn-danger btn-sm">Not Applicable</button>
    @endif
        <a href="javascript:" onclick="showRecord({{$id}});"
       class="text-secondary ms-2">
        <i class="bx bx-show"></i>
    </a>
    @if(!empty($canEdit))
        <a href="javascript:" onclick="showEditViewModel({{$id}});"
           class="text-primary ms-2 ">
            <i class="bx bxs-edit"></i>
        </a>
    @endif
    @if(!empty($canDelete))
        <a href="javascript:" onclick="deleteRecord({{$id}});"
           class="text-danger ms-2">
            <i class="bx bxs-trash"></i>
        </a>
    @endif
</div>
