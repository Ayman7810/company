<div class="toolbar">
    <form class="form">
        <div class="form-row justify-content-between">
            <div class="form-group col-auto mx-2">
                <label class="my-1 mr-2 sr-only" for="perPageSelect">{{__('shard.show')}}</label>
                <select class="custom-select mr-sm-2" id="perPageSelect">
                    <option value="3">3</option>
                    <option value="5" selected>5</option>
                    <option value="8">8</option>
                    <option value="10">10</option>
                </select>
            </div>
           
            <div class="form-group col-auto">
                <label for="search" class="sr-only">{{__('shard.search')}}</label>
                <input type="text" class="form-control" id="searchInput"
                    placeholder="{{__('shard.search')}}">
            </div>
        </div>
    </form>
</div>