<div class="col-lg-10">
    <div class="card">
        <div class="card-header">
            <strong>Catatan/Notes</strong>
        </div>
        <div class="card-body card-block">
           <?php echo form_open('Welcome/edit') ?>
            <div class="has-success form-group">
                <label for="inputSuccess2i" class=" form-control-label">Tulis</label>
                <textarea type="text" rows="12" name="note" id="inputSuccess2i" class="form-control-success form-control"><?php echo $edit['note'] ?></textarea>
            </div>
            <input type="submit" value="Simpan" class="btn-outline-success" name="submit" />
            </form>
            
        </div>
    </div>
</div>

