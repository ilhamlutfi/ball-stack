<div class="row">
    <div class="col-md-6">
        Showing {{ $items->firstItem() }} to {{ $items->lastItem() }} out of {{ $items->total() }} items.
    </div>

    <div class="col-md-6">
         {{ $items->links() }}
    </div>
</div>
