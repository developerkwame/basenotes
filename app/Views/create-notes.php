            <!-- Main Content Start -->
            <div class="main-content p-2 w-100p border-l-thin">

                 <!-- Getting Started Section -->
                 <section id="utilities" class="w-100p">
                    <div class="section-heading mb-2">
                        <h1 class="main-heading fw-thick mb-1 font-blue"></h1>
                    </div>
                    <div id="form" class="sub-section-heading mb-2 border-b-thin">
                        <h2 class="small-heading fw-thick mb-1">Write Notes</h2>
                        <button class="mx-auto px-2 bg-white py-1 px-3 mb-1 border-thin cursor-pointer" id="start_listening"><i class="fa fa-microphone font-green" aria-hidden="true"></i></button>
                        <button class="mx-auto px-2 bg-white py-1 px-3 border-thin cursor-pointer" id="stop_voice"><i class="fa fa-microphone-slash font-red" aria-hidden="true"></i></button>
                    </div>
                    <div class="component mb-4">
                        <form class="border-thin p-2" action="<?=url('notes/store')?>" method="post" autocomplete="off">
                            <div class="form-container mb-2">
                                <div class="mb-2">
                                    <label class="w-100p">Title</label>
                                    <br><br>
                                    <input class="w-100p" type="text" name="title" value="<?=old('title')?>" placeholder="Enter note title">
                                    <small class="font-red tiny-font fw-thick"><?=form_error('title')?></small>
                                </div>

                                <div>
                                    <label class="w-100p">Details</label>
                                    <br><br>
                                    <textarea id="textarea" class="w-100p" name="details" cols="30" rows="10"><?=old('details')?></textarea>
                                    <small class="font-red tiny-font fw-thick"><?=form_error('details')?></small>
                                </div>
                            </div>
                            <div class="flex">
                                <a id="speak" class="mx-auto px-2 bg-white py-1 px-3 border-thin" style="cursor:pointer">Listen to Note</a>
                                <button type="submit" class="mx-auto px-2 bg-white py-1 px-3 border-thin action-btn" style="cursor:pointer">Save Note</button>
                            </div>
                        </form>
                    </div>
                 </section>
            </div>