<table class="table table-bordered users">
                                    <thead class="thead">
                                        <tr>
                                          <th>#</th>
                                          <th>Fullname</th>
                                          <th>Username</th>
                                          <th>Password</th>
                                          <th>Position</th>
                                          <th>Role</th>
                                          <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                    	foreach ($profiles as $profile) {
                                       //var_dump($profile);
                                    		?>
                                    	
                                        <tr>
                                        	<form method="POST" action="">
                                             <td><input class ="disabled" size = '1'  type="text" name="id" value="<?php echo $profile->id; ?>"></td>
		                                         <td><input class ="disabled" type="text" name="fullname" value="<?php echo $profile->fullname; ?>"></td>
		                                         <td><input class ="disabled" type="text" name="username" value="<?php echo $profile->username; ?>"></td>
		                                         <td><input class ="disabled" type="password" name="password" value="<?php echo $profile->password; ?>"></td>
		                                         <td><input type="text" name="position" value="<?php echo $profile->position; ?>">

                                             </td>
                                          		 <td>
		                                          	<select name="role">
									                                 <option <?php if($profile->role == '') { echo 'selected=""'; } ?> value="">Select role</option>
									                                 <option <?php if($profile->role == 'Administrator') { echo 'selected=""'; } ?> value="Administrator">Administrator</option>
									                                 <option <?php if($profile->role == 'Editor') { echo 'selected=""'; } ?> value="Editor">Editor</option>
									                                 <option <?php if($profile->role == 'Contributor') { echo 'selected=""'; } ?> value="Contributor">Contributor</option>
								                	               </select>
                                          		</td>
                                          		<td>
                                          			<button type="submit" name="edit">Save</button>
                                          		</td>
                                            </form>
                                        </tr>
                                       <?php }?>
                                    </tbody>
                                </table>