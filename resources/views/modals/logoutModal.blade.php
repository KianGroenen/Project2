<!-- logoutModal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-fw fa-beer"></i>Zeker dat je wil uitloggen?</h4>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <form action="/resources/store" method="POST" class="form-horizontal"
                              role="form">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label class="control-label" for="resourceName"><i class="fa fa-fw fa-plus"></i> Voeg een grondstof toe</label>
                                    <input type="text" class="form-control"
                                           id="resourceName" name="resourceName"
                                           placeholder="Grondstof naam..."/>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-primary">Toevoegen</button>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li class="list-group-item">
                        <form action="/resources/delete" method="POST" class="form-horizontal"
                              role="form">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label class="control-label"
                                           for="selectresource"><i class="fa fa-fw fa-minus"></i> Verwijder een grondstof</label>
                                    <select name="selectresource" class="form-control selectWidth">
                                        <option value="" class="form-control">Selecteer een grondstof</option>
                                    </select>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-primary">Verwijder</button>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>