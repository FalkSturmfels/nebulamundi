<!-- Modal -->
<div id="removeDialog" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Objekt entfernen</h4>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer">

                <form id="removeForm" action="" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" class="btn btn-default">
                        Entfernen
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    $('#removeDialog').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var entity = button.data('entity')
        var modal = $(this)
        modal.find('p').text("Wollen sie wirklich '" + entity.name + "' entfernen ?")
        modal.find('#removeForm').attr('action', '{{$entityUrl}}' + entity.id)
    });
</script>