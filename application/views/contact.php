<div class="container px-5">
<form action="<?= base_url()?>contact/simpanData" method="post">
  <div class="form-group py-3">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  
  <div class="form-group py-3">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-3" onclick='javascript:alert("Terimakasih, Pesan Anda Sudah Kami Terima")' href='#'>Submit</button>
</form>
</div>