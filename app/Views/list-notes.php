            <!-- Main Content Start -->
            <div class="main-content p-2 w-100p border-l-thin">
                 
                 <?=partial('includes/alerts')?>

                 <!-- Getting Started Section -->
                 <section id="utilities" class="w-100p">
                    <div class="section-heading mb-2">
                        <h1 class="main-heading fw-thick mb-1 font-blue"></h1>
                    </div>

                   <!-- Table Component Striped -->
                    <div class="sub-section-heading mb-2 border-b-thin">
                        <h2 class="small-heading fw-thick mb-1">List all notes</h2>
                        <span id="start_listening"></span>
                        <span id="stop_voice"></span>
                    </div>
                    <div class="component mb-4">
                        <table class="striped w-100p border-none box-shadow-sm">
                            <thead class="border-b-thin font-left bg-deep-blue font-white">
                                    <th width="15%">Date Added</th>
                                    <th>Title</th>
                                    <th width="15%">Action</th>
                            </thead>
                            <tbody>
                                <?php foreach ($notes as $note) : ?>
                                    <tr>
                                        <td><?=format_date('d/m/Y', $note['created_at'])?></td>
                                        <td><?=$note['title']?></td>
                                        <td>
                                            <a href="<?=url('notes/edit', $note['id'])?>"><i class="fa fa-edit font-blue big-font ml-2 py-1"></i></a>
                                            <span class="ml-1">|</span>
                                            <a href="<?=url('notes/delete', $note['id'])?>" onclick="return confirm('Are you sure you want to delete this note?');"><i class="fa fa-trash font-red big-font ml-1 py-1"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                
                            </tbody>
                        </table>
                    </div>

                 </section>

            </div>