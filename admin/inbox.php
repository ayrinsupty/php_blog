<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Inbox</h2>
        <div class="block">        
            <table class="data display datatable" id="example">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "select * from tbl_contact where status='0' order by id desc";
                    $msg = $db->select($query);
                    if ($msg) {
                        $i = 0;
                        while($result = $msg->fetch_assoc()){
                            $i++;
                ?>
                <tr class="odd gradeX">
                    <td><?php echo $i; ?></td>
                    <td><?php echo $result['firstname'].' '.$result['lastname']; ?></td>
                    <td><?php echo $result['email']; ?></td>
                    <td><?php echo $fm->textShorten($result['body'], 30); ?></td>
                    <td><?php echo $fm->formatDate($result['date']); ?></td>
                    <td>
                        <a href="viewmsg.php?msgid=<?php echo $result['id']; ?>">View</a>  || 
                        <a href="replymsg.php?msgid=<?php echo $result['id']; ?>">Reply</a> || 
                        <a href="?seenid=<?php echo $result['id']; ?>">Seen</a>
                    </td>
                </tr>
                <?php } } ?>
            </tbody>
            </table>
        </div>
    </div>

    <div class="box round first grid">
        <h2>Seen</h2>
        <div class="block">        
            <table class="data display datatable" id="example">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd gradeX">
                    <td>01</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Message</td>
                    <td>Date</td>
                    <td>
                        <a href="">Delete</a>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
			setSidebarHeight();
        });
</script>
<?php include 'inc/footer.php';?>