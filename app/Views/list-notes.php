            <!-- Main Content Start -->
            <div class="main-content p-2 w-100p border-l-thin">

                 <!-- Getting Started Section -->
                 <section id="utilities" class="w-100p">
                    <div class="section-heading mb-2">
                        <h1 class="main-heading fw-thick mb-1 font-blue">List Notes</h1>
                    </div>

                   <!-- Table Component Striped -->
                    <div class="sub-section-heading mb-2 border-b-thin">
                        <h2 class="small-heading fw-thick mb-1">List all notes</h2>
                    </div>
                    <div class="component mb-4">
                        <table class="striped w-100p border-none box-shadow-sm">
                            <thead class="border-b-thin font-left bg-deep-blue font-white">
                                    <th width="15%">Date Added</th>
                                    <th>Title</th>
                                    <th width="15%">Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dave</td>
                                    <td>+233 55 847 4211</td>
                                    <td>
                                        <a href="<?=url('notes/edit')?>"><i class="fa fa-edit font-blue big-font ml-2 py-1"></i></a>
                                        <span class="ml-1">|</span>
                                        <a href="<?=url('')?>" onclick="return confirm('Are you sure you want to delete this note?');"><i class="fa fa-trash font-red big-font ml-1 py-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Davida</td>
                                    <td>+233 20 642 6465</td>
                                    <td>
                                        <a href="<?=url('notes/edit')?>"><i class="fa fa-edit font-blue big-font ml-2 py-1"></i></a>
                                        <span class="ml-1">|</span>
                                        <a href="<?=url('')?>" onclick="return confirm('Are you sure you want to delete this note?');"><i class="fa fa-trash font-red big-font ml-1 py-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Davies</td>
                                    <td>+233 59 111 1234</td>
                                    <td>
                                        <a href="<?=url('notes/edit')?>"><i class="fa fa-edit font-blue big-font ml-2 py-1"></i></a>
                                        <span class="ml-1">|</span>
                                        <a href="<?=url('')?>" onclick="return confirm('Are you sure you want to delete this note?');"><i class="fa fa-trash font-red big-font ml-1 py-1"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                 </section>

            </div>