<section class="my-3 table table-bordered border-primary">
	<h2>Products:</h2>

	<table class="my-3 table">
		<thead>
			<tr class="d-flex">
				<th class="col-3">Name</th>
				<th class="col-3">Description</th>
				<th class="col-3">Price</th>
				<th class="col-3">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($course_data as $course){
					echo "<tr class='d-flex'>";

					echo "<td class='col-3'>$course->name</td>";
					echo "<td class='col-3'>$course->description</td>";
					echo "<td class='col-3'>$course->price</td>";
					echo "<td class='col-3'>
							 <a href='api/product/$course->id' data-id='$course->id' class='btn btn-primary'>Show</a>
							 <a href='main/edit/$course->id' data-id='$course->id' class='btn btn-primary'>Edit</a>
						     <a href='main/remove_course/$course->id' data-id='$course->id' class='btn btn-danger'>Remove</a>
						 </td>";
				} ?>
		</tbody>
	</table>
</section>

