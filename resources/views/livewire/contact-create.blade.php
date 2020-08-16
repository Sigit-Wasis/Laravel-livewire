<div>
	<form wire:submit.prevent="store">
		<div class="form-group">
			<div class="form-row">
				<div class="col">
					<input wire:model="name" type="text" name="name" class="form-control" placeholder="Name">
				</div>
				<div class="col">
					<input wire:model="phone" type="text" name="phone" class="form-control" placeholder="Phone">
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-sm btn-primary">Submit</button>
	</form>
</div>
