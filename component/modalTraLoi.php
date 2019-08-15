
<!-- Trả Lời -->
<div class="modal fade" id="exampleModalCenterTraLoi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Hãy trả lời thật lòng cho a biết nhé..! 😉</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="jumbotron">
            <form action="action/XuLi.php" method="post" name="fAdd" enctype="multipart/form-data">
                <h2 class="text-danger display-4 text-center">Thương Em 😍</h2>
                <hr class="my-4">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <div class="radio ">
                                <label class="form-control  btn btn-outline-danger">
                                    Có em cũng yêu anh
                                    <input type="radio" name="ketqua" required value="Có">
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="radio ">
                                <label class="form-control  btn btn-outline-dark">
                                    Em xin lỗi
                                    <input type="radio" name="ketqua" required value="Không">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form-control" placeholder="Dù kết quả thể nào... Anh cũng mong em để lại một lời nhắn cho anh...!" required name="loinhan"></textarea>
                </div>
                <div class="form-group d-flex justify-content-center">
                    <input type="submit" class="btn btn-success" value="Gửi đi"/> 
                </div>
            </form>
        </div>
      </div>
  </div>
</div>
