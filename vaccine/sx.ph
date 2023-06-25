 <table class="table order">
                <thead>
                  <tr class = "bg-dark text-white">
                    <th scope="col">No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Supplier Name</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Product Type</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                      $sql = "SELECT * FROM order1 WHERE status = 'Received'";
                      $result1 = mysqli_query($conn,$sql);
                      $cnt = 1;
                      while ($row = mysqli_fetch_assoc($result1)) {
                        ?>
                          <th scope="row"> <?php echo $cnt; ?> </th>
                          <td> <?php echo $row['date']; ?> </td>
                          <td> <?php echo $row['s_name']; ?> </td>
                          <td> <?php echo $row['p_name']; ?> </td>
                          <td> <?php echo $row['quantity']; ?> </td>
                          <td> <?php echo $row['p_type']; ?> </td>
                          <td> <?php if($row['status'] == 'Received'){
                                          echo "Received";
                                      }
                                      else {
                                        echo "Pending";
                                      }
                                       $cnt++;
                                  ?> 
                          </td>
                        </tr>
                        <?php
                      }
                    ?>
                </tbody>
              </table>