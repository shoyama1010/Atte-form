<?php

namespace App\Http\Controllers;

use App\Models\Attendance;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function punchIn(Request $request)
    {
        $userId = Auth::user()->id;
        $punchInAt = now();

        Attendance::create([
            'user_id' => $userId,
            'punch_in_at' => $punchInAt,
        ]);

        return redirect()->back()->with('success', '勤務開始を記録しました。');
    }

    public function punchOut(Request $request)
    {
        $userId = Auth::user()->id;
        $punchOutAt = now();

        $attendance = Attendance::where('user_id', $userId)->whereNull('punch_out_at')->first();

        if ($attendance) {
            $attendance->punch_out_at = $punchOutAt;
            $attendance->save();

            return redirect()->back()->with('success', '勤務終了を記録しました。');
        } else {
            return redirect()->back()->with('error', '勤務開始を記録していないため、勤務終了を記録できません。');
        }
    }

    public function attendanceHistory(Request $request)
    {
        $userId = Auth::user()->id;
        $attendances = Attendance::where('user_id', $userId)->get();

        return view('attendance_history', ['attendances' => $attendances]);
    }
}
