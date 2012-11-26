default_run_options[:pty] = true

if ENV['environment'] == "production"
  set :application, "xmas_card"
  role :app, "172.21.1.54"
  role :web, "172.21.1.54"
  role :db,  "172.21.1.54", :primary => true
else
  set :application, "xmas_card"
  role :app, "webdev.southdevon.ac.uk"
  role :web, "webdev.southdevon.ac.uk"
  role :db, "webdev.southdevon.ac.uk", :primary => true
end

set :repository,  "git@github.com:sdc/xmas_cards.git"
set :branch,      "master"
set :deploy_to, "/srv/#{application}"
set :scm, :git

namespace :deploy do
  %W(start stop restart migrate finalize_update).each do |event|
    task event do
      # don't
    end
  end
end
