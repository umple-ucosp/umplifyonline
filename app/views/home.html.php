<div class="container mtb">
  <div class="row">
    <!-- LEFT PANE -->
    <div class="col-lg-12">

      <table class="table table-condensed table-bordered table-condensed umplify-summary">
        <tr>
          <th>Owner</th>
          <th>Project</th>
          <th>Version</th>
          <th>Umplifier Score</th>
        </tr>

        <?php foreach(Project::listOwners() as $owner) { ?>
          <?php foreach(Project::listProjects($owner) as $project) { ?>
            <?php foreach(Project::listVersions($owner, $project) as $version) { 
              $umplifierScore = Project::getUmplifierScore($owner, $project, $version) ?>
              <tr>
                <td><?php echo $owner; ?></td>
                <td><?php echo $project; ?></td>
                <td><?php echo $version; ?></td>
                <td><?php echo $umplifierScore; ?></td>
              </tr>
            <?php } ?>
          <?php } ?>
        <?php } ?>
      </table>

    </div>

  </div>
</div>
